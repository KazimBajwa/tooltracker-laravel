<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToolsManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tool', function (Blueprint $table) {
            $table->id();
            $table->string('itemId')->nullable();
            $table->string('name')->nullable();
            $table->string('rfId')->nullable();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained('sub_categories')->onDelete('cascade');
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->boolean('is_owned')->nullable();
            $table->string('status')->nullable();
            $table->string('model')->nullable();
            $table->string('serial')->nullable();
            $table->date('purchase_date')->nullable();
            $table->string('price')->nullable();
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tools_managers');
        Schema::dropIfExists('tool'); //to rename the table
    }
}
