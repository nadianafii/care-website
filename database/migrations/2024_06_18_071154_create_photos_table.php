<php
public function up()
{
    Schema::create('photos', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('path');
        $table->string('caption')->nullable();
        $table->timestamps();
    });
}
