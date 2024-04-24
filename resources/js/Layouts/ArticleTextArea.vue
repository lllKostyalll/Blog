
<script setup>

import ApplicationLogo from '@/Components/Paragraph.vue';

defineProps({
	textList:Object,
	
})

</script>


<template>
	<div class="article_text_container" v-for="text in textList">
		<Paragraph :text="text.text" />
	</div>
</template>
