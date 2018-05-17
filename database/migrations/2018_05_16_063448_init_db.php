<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 分类
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('名称');
            $table->string('type')->comment('类别');
            $table->string('order')->comment('排名');
            $table->tinyInteger('top')->comment('是否显示在主页页面');
            $table->string('description')->nullable()->comment('说明');
            // 用来记录创建时间和最近更新
            $table->timestamps();
        });


        // 系列文章
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->text('content')->comment('内容');
            $table->string('order')->comment('排序');
            $table->unsignedInteger('cate_id')->comment('类别id');
            $table->string('sub_cate_ids')->default('')->nullable(false)->comment('其它类别id');
            $table->string('head_image')->nullable()->comment('头图');
            $table->tinyInteger('top')->default(0)->comment('是否置顶');
            $table->string('about')->default('')->nullable(false)->comment('侧边栏文字');
            $table->integer('view_count')->default(0)->comment('浏览次数');
            // 用来记录创建时间和最近更新
            $table->timestamps();

            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
        });

        // 配置内容
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->comment('类型');
            $table->string('content')->comment('内容');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('categories');
    }
}
