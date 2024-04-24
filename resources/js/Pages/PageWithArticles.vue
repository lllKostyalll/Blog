
<script setup>
//import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
//import { Head } from '@inertiajs/vue3';

import Header from '@/Layouts/Header.vue'; 
import Footer from '@/Layouts/Footer.vue';

import ArticlePost from '@/Layouts/ArticlePost.vue';


const props=defineProps({
	latestArticles:Object,
	currentArticlePage:{type:Number},
});

props['currentArticlePage']=1

import axios from 'axios';

import { router } from '@inertiajs/vue3'

function loadMore() {
	if (props['currentArticlePage'] < 1){
		return
	}
	axios.get(`/articles/page=${props['currentArticlePage']}`)
	.then(function (response) {
		if (response.data.length == 0) { 
			console.log('it is empty')
			return
		}
		for (const article of response.data) {
			props['latestArticles'].push(article)
		
		}
		props['currentArticlePage']+=1
	})
}




</script>




<template>
	<div id="root">
		<Header />
		<main class="main">
			<div class="inner">	
				<div class="article_gallery">
					<ArticlePost v-for="article in latestArticles" :article_id="article.id" :image_id="article.title_image_id" :article_title="article.title" />

				</div>
				 <button id="load_more_articles_button" @click="loadMore">Load more...</button>
			</div>
		</main>
		<Footer />
	</div>
</template>

<script>

</script>
