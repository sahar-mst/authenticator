 <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('tasks', function (Blueprint $table) {
//             $table->id();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('tasks');
//     }
// }; 







// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration {
//     public function up(): void
//     {
//         Schema::create('tasks', function (Blueprint $table) {
//             $table->id();

//             // ارتباط با پروژه
//             $table->foreignId('project_id')
//                   ->constrained()
//                   ->cascadeOnDelete();

//             $table->string('title');

//             // وضعیت تسک
//             $table->enum('status', ['pending', 'in_progress', 'done'])
//                   ->default('pending');

//             // اولویت
//             $table->enum('priority', ['low', 'medium', 'high'])
//                   ->default('medium');

//             // زمان انجام
//             $table->dateTime('due_at')->nullable();

//             $table->timestamps();
//         });
//     }

//     public function down(): void
//     {
//         Schema::dropIfExists('tasks');
//     }
// };






//  use Illuminate\Database\Migrations\Migration;
//  use Illuminate\Database\Schema\Blueprint;
//  use Illuminate\Support\Facades\Schema;

// Schema::create('tasks', function (Blueprint $table) {
//     $table->id();
//     $table->foreignId('project_id')->constrained()->cascadeOnDelete();
//     $table->string('title');
//     $table->text('details')->nullable();
//     $table->enum('status', ['todo','in_progress','done'])->default('todo');
//     $table->enum('priority', ['low','medium','high'])->default('medium');
//     $table->dateTime('due_at')->nullable();
//     $table->timestamps();
// });



 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;
 
class Task extends Model
{
    protected $fillable = ['title','status','priority','due_at'];
}



