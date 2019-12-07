<template>
	<section class="replenishment form-group bd-example" style="">
	    <div class="alert alert-primary">
	        <span>После добавления ролика, нажимайте «Cохранить»</span>
	        <br>
	        <span>Для получения нового видео нажмите «Получить видео»</span>
	    </div>
	    <form :id="video.id">
	        <input class="form-control" id="video_id" type="hidden" name="video_id" value="5950">
	        <input class="form-control" id="video_file" type="hidden" name="videofile" value="186378">
	        <div class="row" style="padding: 0 15px">
	            <table class="form-group col-lg-6 col-md-12 col-xs-12">
	                <tbody>
	                    <tr>
	                        <td>
	                            <b>Имя актрисы</b>
	                            <span class="badge badge-secondary form_actor-name" id="video_name">{{ video.name}}
	                            </span>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td id="video_player">
	                        	<video :poster="'/poster/' + video.videofileint +'.mp4.jpg'" controls="controls" style="width:100%;max-width: 853px;">
	                            	<source :src="'/video/'+ video.videofileint +'.mp4'" type="video/mp4; codecs=&quot;avc1.42E01E,mp4a.40.2&quot;">
	                            </video>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td align="left" class="info-labels">
	                            <label class="title">title
	                            	<b class="message-color" :style="title.length < 50 ? 'color: red' : 'color: green'">{{ title.length }} </b><br>
	                            </label>
	                            <input class="form-control form-control-sm" v-model="title" type="text" name="title" value="">
	                            <label class="keywords">keywords
									<b class="message-color" :style="keywords.length < 40 ? 'color: red' : 'color: green'">{{ keywords.length }} </b><br>
	                            </label>
	                            <br>
	                            <input class="form-control form-control-sm" v-model="keywords" type="text" name="keywords">
	                            <label class="description">description
									<b class="message-color" :style="description.length < 120 ? 'color: red' : 'color: green'">{{ description.length }} </b><br>
	                            </label>
	                            <br>
	                            <input class="form-control form-control-sm" type="text" v-model="description" name="description" value="">
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <label class="text_video">Описание <b class="message-color" :style="info.length < 350 ? 'color: red' : 'color: green'">{{ info.length }}</b></label>
	                            <textarea name="text_video" v-model="info" rows="5"></textarea>
	                        </td>
	                    </tr>
	                </tbody>
	            </table>
	            <div class="col-lg-6 d-sm-none d-xs-none d-md-block" style="margin-top: 15px;">
	                <div class="alert alert-danger">
	                    <h5 class="alert-heading text-center">
	                        ДАННЫЕ ПУНКТЫ ВАЖНЫ
	                    </h5>
	                    <h6 class="alert-heading text-center">НЕВЫПОЛНЕНИЕ ОНЫХ - НЕТ ОПЛАТЫ
	                    </h6>
	                    <p>В описании используем слова относящейся к разделу. Если добавляете в раздел блондинки - в описании должно быть написано про блондинок. Если они сосут - значит описать это и добавить в соответствующий раздел и т.д.</p>
	                    <p>
	                        Помимо вышеперечисленного, мы указываем всю женскую атрибутику (чулки, каблуки, очки) + особенность локации и место действия (массаж, в масле, спортсменки, на природе, в лесу, на улице, в офисе и т.д.).
	                    </p>
	                    <ul>Важно проставить главные категории:
	                        <li>Это поза, нация, цвет волос + изюминку ролика: </li>
	                        <li>Локация: в машине, массаж, врачи, в школе, спортсменки и т.д.</li>
	                        <li>Девушки: в платье, юбки, чулки, очки, красивое нижнее белье и т.д.</li>
	                    </ul>
	                    <hr>
	                    <p>Если вы указываете имя актрисы в тайтле, либо в описании - ставьте категорию "порно звезды" или "актрисы"</p>
	                    <hr>
	                    <p>В категориях указываем цвет волос, особенности национальной принадлежности девушки (мулатки, латинки, негритянки и т.д.), и то в какой позе она занимается сексом.</p>
	                    <p>В первую очередь, мы это делаем для удобства пользователей поиска искомого контента.</p>
	                    <hr>
	                    <p class="mb-0">НЕДОПУСТИМО присваивания категорий которые не соответствуют ролику. (если в ролике блондинка дрочит, то не должна стоять категория “негры”)</p>
	                    <hr>
	                    <p class="mb-0">НЕДОПУСТИМО использование спецсимволов | % @ ^ * ( ) &amp; $ # ; _ /</p>
	                    <hr>
	                    <p class="mb-0">! ? . не используется в title. В остальных полях на ! ? . ограничений нет</p>
	                </div>
	            </div>
	        </div>

	        <div class="categories_section">
	            <div class="row">
	                <div class="form-inline mb-2 col-md-6" style="padding-right: 0;">
	                    <div class="col-md-4">
	                        <b>Категории</b>
	                        <font id="cat-count" color="red"></font>
	                    </div>
	                    <div class="col-md-8 p-0" id="category_search">
	                        <input type="text" id="category_search-line" class="form-control-sm" v-model="filteredText" @input="catFilter()" placeholder="Поиск категории">
	                        <div id="category_search-result">
								<li class="custom-control category_item custom-checkbox mb-2" v-for="cat in filteredCat">
									<input type="checkbox" class="custom-control-input" data-category="112" id="cat-112">
									<label class="custom-control-label" for="cat-112">{{ cat.value }}</label>
								</li>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="card" v-for="(category, index) in categories">
	            	<ul class="list-group list-group-flush" id="categories_container">
            			<h5 class="group-title">{{ category.value }} <span v-if="category.required" class="badge badge-danger">!</span>
                            <hr>
                        </h5>
                        <ul class="row" v-for="sub in sub_cat">
                        	<div class="col-md-12 row categories_list" v-if="sub.parent == category.id">
								<p class="category-title col-md-12">{{ sub.value }}</p>
								<li v-for="(tag, key) in tags" v-if="tag.parent == sub.id" class="custom-control category_item category_item-299 custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" :data-category="tag.id" :id="'cat-'+tag.id">
									<label class="custom-control-label" :for="'cat-'+tag.id">{{ tag.value }}</label>
								</li>
                        	</div>
                        </ul>
	            	</ul>
	            </div>
	        </div>
	        <button id="video_set" data-id="5950" type="button" class="btn btn-success" @click="setVideoInfo()">сохранить</button>
	    </form>
	</section>
</template>
<script>
	import axios from 'axios'
	export default {
		data(){
			return {
				video: [],
				title: '',
				keywords: '',
				description: '',
				categories: [],
				sub_cat: [],
				tags: [],
				info: '',
				filteredText: '',
				filteredCat: []
			}
		},
		async created(){
			try {
				const videoinfo = await axios.get('/api/video');
				this.video = videoinfo.data;

				const responce = await axios.get('/api/categories');
				this.categories = responce.data.filter( item => item.parent == 0);
				this.sub_cat    = responce.data.filter( item => item.sort == 2);
				this.tags       = responce.data.filter( item => item.sort == 3);

			} catch(e) {
				console.error(e);
			}
		},
		methods: {
			setVideoInfo(){
				console.log(this.title);
			},
		},
		computed: {
			catFilter(){
				if (this.filteredText.length){
					this.filteredCat =  this.tags.filter(item => item.value.toLowerCase().indexOf(this.filteredText.toLowerCase()) >= 0);
				} else {
					this.filteredCat = [];
				}
			}
		}	
	}
</script>