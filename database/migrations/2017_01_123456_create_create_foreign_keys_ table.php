<?php
/**
 * @Author: Phillip Madsen
 * @Date:   2016-01-19 16:12:40
 * @Last Modified by:   Phillip Madsen
 * @Last Modified time: 2016-01-19 16:56:53
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {$table->foreign('address_id')->references('id')->on('addresses') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('users', function(Blueprint $table) {$table->foreign('article_id')->references('id')->on('articles') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('users', function(Blueprint $table) {$table->foreign('billing_id')->references('id')->on('billing_addresses') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('users', function(Blueprint $table) {$table->foreign('profile_id')->references('id')->on('profiles') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('users', function(Blueprint $table) {$table->foreign('shipping_id')->references('id')->on('shipping_addresses') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('users', function(Blueprint $table) {$table->foreign('employee_hr_id')->references('id')->on('hr') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('users', function(Blueprint $table) {$table->foreign('question_id')->references('id')->on('faqs') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('users', function(Blueprint $table) {$table->foreign('page_id')->references('id')->on('pages') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('profiles', function(Blueprint $table) {$table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('addresses', function(Blueprint $table) {$table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('billing_addresses', function(Blueprint $table) {$table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('shipping_addresses', function(Blueprint $table) {$table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('articles', function(Blueprint $table) {$table->foreign('author_id')->references('id')->on('users') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('hr', function (Blueprint $table) {$table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('faqs', function (Blueprint $table) {$table->foreign('answered_by')->references('id')->on('users') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('faqs', function (Blueprint $table) {$table->foreign('asked_by')->references('id')->on('users') ->onDelete('no action') ->onUpdate('cascade'); });
		Schema::table('pages', function (Blueprint $table) {$table->foreign('section_id')->references('id')->on('page_sections') ->onDelete('cascade') ->onUpdate('cascade'); });
		Schema::table('pages', function (Blueprint $table) {$table->foreign('author_id')->references('id')->on('users') ->onDelete('restrict') ->onUpdate('restrict'); });
		Schema::table('pages', function (Blueprint $table) {$table->foreign('slider_id')->references('id')->on('sliders') ->onDelete('restrict') ->onUpdate('restrict'); });
		Schema::table('sliders', function (Blueprint $table) {$table->foreign('page_id')->references('id')->on('pages') ->onDelete('restrict') ->onUpdate('restrict'); });
		Schema::table('sliders', function (Blueprint $table) {$table->foreign('article_id')->references('id')->on('articles') ->onDelete('restrict') ->onUpdate('restrict'); });
	}

            public function down()
	    {
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_address_id_foreign'); });
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_article_id_foreign'); });
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_billing_id_foreign'); });
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_profile_id_foreign'); });
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_software_id_foreign'); });
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_shipping_id_foreign'); });
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_task_id_foreign'); });
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_employee_hr_id_foreign'); });
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_question_id_foreign'); });
	        Schema::table('users', function (Blueprint $table) {$table->dropForeign('users_page_id_foreign'); }); Schema::table('profiles', function (Blueprint $table) {$table->dropForeign('profiles_user_id_foreign'); });
	        Schema::table('profiles', function (Blueprint $table) {$table->dropForeign('profiles_api_key_id_foreign'); });
	        Schema::table('addresses', function (Blueprint $table) {$table->dropForeign('addresses_user_id_foreign'); });
	        Schema::table('billing_addresses', function (Blueprint $table) {$table->dropForeign('billing_addresses_user_id_foreign'); });
	        Schema::table('shipping_addresses', function (Blueprint $table) {$table->dropForeign('shipping_addresses_user_id_foreign'); });
	        Schema::table('articles', function (Blueprint $table) {$table->dropForeign('articles_user_id_foreign'); });
	        Schema::table('supports', function (Blueprint $table) {$table->dropForeign('supports_assigned_to_foreign'); });
	        Schema::table('hr', function (Blueprint $table) {$table->dropForeign('hr_user_id_foreign'); });
	        Schema::table('faqs', function (Blueprint $table) {$table->dropForeign('faqs_answered_by_foreign'); });
	        Schema::table('faqs', function (Blueprint $table) {$table->dropForeign('faqs_asked_by_foreign'); });
	        Schema::table('pages', function (Blueprint $table) {$table->dropForeign('pages_section_id_foreign'); });
	        Schema::table('pages', function (Blueprint $table) {$table->dropForeign('pages_author_id_foreign'); });
	        Schema::table('pages', function (Blueprint $table) {$table->dropForeign('pages_slider_id_foreign'); });

	        Schema::table('photo_galleries', function (Blueprint $table) {$table->dropForeign('photo_galleries_category_id_foreign'); });
	        Schema::table('sliders', function (Blueprint $table) {$table->dropForeign('sliders_page_id_foreign'); });
	        Schema::table('sliders', function (Blueprint $table) {$table->dropForeign('sliders_article_id_foreign'); });
	        Schema::table('sliders', function (Blueprint $table) {$table->dropForeign('sliders_blog_post_id_foreign'); });
	    }


/**
*        // Schema::table('api_keys', function (Blueprint $table) {$table->dropForeign('api_keys_user_id_foreign'); });
*        // Schema::table('api_logs', function (Blueprint $table) {$table->dropForeign('api_logs_api_key_id_foreign'); });
*        // Schema::table('softwares', function (Blueprint $table) {$table->dropForeign('softwares_user_id_foreign'); });
*        // Schema::table('softwares', function (Blueprint $table) {$table->dropForeign('softwares_product_id_foreign'); });
*        // Schema::table('products', function (Blueprint $table) {$table->dropForeign('products_product_info_foreign'); });
*        // Schema::table('products_translations', function (Blueprint $table) {$table->dropForeign('products_translations_product_id_foreign'); });
*        // Schema::table('products_options', function (Blueprint $table) {$table->dropForeign('products_options_product_id_foreign'); });
*        // Schema::table('products_options_values', function (Blueprint $table) {$table->dropForeign('products_options_values_option_id_foreign'); });
*        // Schema::table('products_variants', function (Blueprint $table) {$table->dropForeign('products_variants_product_id_foreign'); });
*        // Schema::table('products_properties_values', function (Blueprint $table) {$table->dropForeign('products_properties_values_prop_id_foreign'); });
*        // Schema::table('products_images', function (Blueprint $table) {$table->dropForeign('products_images_product_variant_id_foreign'); });
*        // Schema::table('tasks', function (Blueprint $table) {$table->dropForeign('tasks_assigned_to_foreign'); });
*        // Schema::table('tasks', function (Blueprint $table) {$table->dropForeign('tasks_created_by_foreign'); });
*        // Schema::table('blog_posts', function (Blueprint $table) {$table->dropForeign('blog_posts_slider_id_foreign'); });
*        // Schema::table('categories', function (Blueprint $table) {$table->dropForeign('categories_photo_gallery_id_foreign'); });

 */

}