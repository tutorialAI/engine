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
	                        <input type="text" id="category_search-line" class="form-control-sm" placeholder="Поиск категории">
	                        <div id="category_search-result">
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="card">
	                <ul class="list-group list-group-flush" id="categories_container">
	                    <li class="group-title required-group">
	                        <h5>Возраст <span class="badge badge-danger">!</span>
	                            <hr>
	                        </h5>
	                        <ul class="row">
	                            <div class="col-md-12 row categories_list">
	                                <p class="category-title col-md-12">Старые</p>
	                                <li class="custom-control category_item category_item-299 custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="299" id="cat-299"><label class="custom-control-label" for="cat-299">Старые</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="77" id="cat-77"><label class="custom-control-label" for="cat-77">Старухи</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="102" id="cat-102"><label class="custom-control-label" for="cat-102">Молодые и старые</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="181" id="cat-181"><label class="custom-control-label" for="cat-181">Старики</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="182" id="cat-182"><label class="custom-control-label" for="cat-182">Деды</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="52" id="cat-52"><label class="custom-control-label" for="cat-52">Старушки</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="63" id="cat-63"><label class="custom-control-label" for="cat-63">Бабушки</label></li>
	                            </div>
	                            <div class="col-md-12 row categories_list">
	                                <p class="category-title col-md-12">Зрелые</p>
	                                <li class="custom-control category_item category_item-4 custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="4" id="cat-4"><label class="custom-control-label" for="cat-4">Зрелые</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="72" id="cat-72"><label class="custom-control-label" for="cat-72">Милфы</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="108" id="cat-108"><label class="custom-control-label" for="cat-108">Постарше</label></li>
	                            </div>
	                            <div class="col-md-12 row categories_list">
	                                <p class="category-title col-md-12">Молодые</p>
	                                <li class="custom-control category_item category_item-42 custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="42" id="cat-42"><label class="custom-control-label" for="cat-42">Молодые</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="243" id="cat-243"><label class="custom-control-label" for="cat-243">18 лет</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="6" id="cat-6"><label class="custom-control-label" for="cat-6">Подростки</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="14" id="cat-14"><label class="custom-control-label" for="cat-14">Молоденькие</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="35" id="cat-35"><label class="custom-control-label" for="cat-35">Студенты</label></li>
	                                <li class="custom-control category_item custom-checkbox mb-2"><input type="checkbox" class="custom-control-input" data-category="68" id="cat-68"><label class="custom-control-label" for="cat-68">Юные</label></li>
	                            </div>
	                        </ul>
	                    </li>
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
				info: ''
			}
		},
		async created(){
			try {
				const res = await axios.get('/api/video');
				this.video = res.data;
				console.log(this.video);
			} catch(e) {
				console.error(e);
			}
		},
		methods: {
			setVideoInfo(){
				console.log(this.title);
			},
			inputLength(){
			}
		},
		computed: {
			showTitle(){
				console.log(this.title);
			}
		}	
	}
</script>