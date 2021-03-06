<?php namespace MarkDai\SayitPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarkdaiSayitpluginDebateSectionSpeech2 extends Migration
{
    public function up()
    {
        Schema::table('markdai_sayitplugin_debate_section_speech', function($table)
        {
            $table->string('speech', 512)->change();
        });
    }
    
    public function down()
    {
        Schema::table('markdai_sayitplugin_debate_section_speech', function($table)
        {
            $table->string('speech', 191)->change();
        });
    }
}
