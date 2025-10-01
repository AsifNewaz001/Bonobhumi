<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // For SQLite, we need to recreate the table
        if (DB::getDriverName() === 'sqlite') {
            // Create a temporary table with new structure
            Schema::create('orders_new', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('mobile');
                $table->text('address');
                $table->string('package'); // Changed to string for SQLite
                $table->integer('quantity')->default(1);
                $table->string('delivery_area'); // Changed to string for SQLite
                $table->decimal('total', 10, 2);
                $table->string('status')->default('pending');
                $table->timestamps();
            });

            // Copy data from old table to new table
            DB::statement('INSERT INTO orders_new (id, name, mobile, address, package, quantity, delivery_area, total, status, created_at, updated_at)
                SELECT id, name, mobile, address, package, 1, delivery_area, total, status, created_at, updated_at FROM orders');

            // Drop old table and rename new table
            Schema::drop('orders');
            Schema::rename('orders_new', 'orders');
        } else {
            // For MySQL/PostgreSQL
            Schema::table('orders', function (Blueprint $table) {
                $table->integer('quantity')->default(1)->after('package');
            });

            DB::statement("ALTER TABLE orders MODIFY COLUMN package ENUM('regular', 'family') NOT NULL");
            DB::statement("ALTER TABLE orders MODIFY COLUMN delivery_area ENUM('inside', 'outside') NOT NULL");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (DB::getDriverName() === 'sqlite') {
            // Recreate original table structure
            Schema::create('orders_old', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('mobile');
                $table->text('address');
                $table->string('package');
                $table->string('delivery_area');
                $table->decimal('total', 10, 2);
                $table->string('status')->default('pending');
                $table->timestamps();
            });

            // Copy data back
            DB::statement('INSERT INTO orders_old (id, name, mobile, address, package, delivery_area, total, status, created_at, updated_at)
                SELECT id, name, mobile, address, package, delivery_area, total, status, created_at, updated_at FROM orders');

            Schema::drop('orders');
            Schema::rename('orders_old', 'orders');
        } else {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('quantity');
            });

            DB::statement("ALTER TABLE orders MODIFY COLUMN package ENUM('single', 'bundle') NOT NULL");
            DB::statement("ALTER TABLE orders MODIFY COLUMN delivery_area ENUM('dhaka', 'outside') NOT NULL");
        }
    }
};
