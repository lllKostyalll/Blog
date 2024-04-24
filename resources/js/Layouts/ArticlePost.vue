
<script setup>

import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3'


defineProps({
	article_id:Number,
	image_id:Number,
	article_title:String,
	
})

</script>


<template>
	<div class="gallery_item">
		<!--<Link :href="route('article')">-->
		<Link :href="'article/'+article_id">
			<img :src="'image/'+image_id" alt="Post Image">
			<div class="article_title">{{ article_title }}</div>
		</Link>
	</div>
</template>
