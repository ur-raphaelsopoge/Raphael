public function up(): void
{
    Schema::create('login_tb', function (Blueprint $table) {
        $table->id();
        $table->string('username')->unique();
        $table->string('firstname');
        $table->string('lastname');
        $table->string('password');
        $table->timestamps();
    });
}