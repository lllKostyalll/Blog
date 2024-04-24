
<script setup>
//import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
//import { Head } from '@inertiajs/vue3';
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';

import SearchBar from '@/Layouts/SearchBar.vue';

//import ArticleTextArea from '@/Layouts/ArticleTextArea.vue';
//<!--<ArticleTextArea :textList="text" />-->

defineProps({ 
	article: Object, 
	//text: String,
	textList: Object,
	//textList: Object,
})
</script>


<template>
	<div id="root">
		<Header />
		<main class="main">
			<div class="inner">
				<SearchBar />	
				<div class="article_page_container">
					<div class="article_page_image">
						<img :src="'/image/'+article.title_image_id" alt="Post Image">
					</div>
					<div class="article_page_text_container">
						<div class="text" v-for="textListItem in textList">
							{{textListItem.text}}
							<!--{{text}}-->
						</div>
					</div>
				</div>
			</div>
		</main>
		<Footer />
	</div>
</template>
