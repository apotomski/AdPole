<?php

use Carbon\Carbon;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Continue_;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $records = Announcement::all();
        if (Schema::hasColumn('announcements', 'activity_start')) {
            Schema::table('announcements', function (Blueprint $table) {
                $table->dropColumn('activity_start');
            });
        }

        Schema::table('announcements', function (Blueprint $table) {
            $table->timestamp('activity_start')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        if(!$records->isEmpty()) {
            foreach($records as $record) {
                $modifyRecord = Announcement::find($record->id);
                if(empty($modifyRecord))
                    continue;

                $now = Carbon::createFromFormat('Y-m-d', $record->activity_start)->format('Y-m-d H:i:s');
                $modifyRecord->activity_start = $now;

                $modifyRecord->save();
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announcements', function (Blueprint $table) {
            $table->date('activity_start')->change();
        });
    }
};
