<template>
    <div>
    <br>
	<div class="d-flex">
	  <a href="/adminiztrator.php?page=towns&amp;mode=add" class="btn btn-outline-success"><i class="fa fa-plus" aria-hidden="true"></i>
	   Добавить</a>
	  <input type="text" id="search-text" class="form-control col-lg-6" style="margin-left: 15px;" placeholder="Фильтр по сайтам">
	</div>
    <br>
    <br>	
	<table class="table table-hover site_list" cellspacing="1">
		<thead class="table-primary">
		     <tr>
		       <th width="2%" align="center">ID</th>
		       <th width="15%" align="center">Сайт</th>
		       <th width="65%" align="center">URL1</th>
		       <th width="10%" style="text-align: center;">Видео</th>
		       <th width="5%" align="center" colspan="2"><b>Операции</b>
		     </th></tr> 
		  </thead>
        <tbody id="list">
            <tr  v-for="(site, index) in sites" :data-category="site.id">
                <td align="left">{{ site.id }}</td>
                <td align="center">
                    <i class="fa fa-folder-o"></i>
                    {{ site.foldersite}}
                </td>
                <td align="left"><strong>{{ site.name }}</strong></td>
                <td align="center"><a href="adminiztrator.php?page=forms&amp;town_f=42">{{ site.count }}</a></td>
                <td align="center">
                    <a href="adminiztrator.php?page=towns&amp;mode=edit&amp;id=42" title="Редактировать" class="btn btn-outline-primary btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                <td align="center">
                    <span title="Удалить" class="btn btn-outline-danger btn-sm" onclick="remove(42);">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>    
    </div>
</template>
<script>
import axios from 'axios'
export default {
	data() {
		return {
			sites: []
		}
	},
	methods:{

	},
	async created(){
		try {
			const res = await axios.get('/api/sites');
			this.sites = res.data;
			console.log(res.data);
		} catch(e) {
			console.log(e);
		}
	}
}

</script>
