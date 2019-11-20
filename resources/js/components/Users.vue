<template>
	<div class="col-lg-12">
		users list
		<table class="table table-hover table-light">
			<thead class="table-primary">
		      <th width="2%" scope="col">#</th>
		      <th width="73%" scope="col">Логин</th>
		      <th width="20%" scope="col">Статус</th>
		      <th width="5%" align="center" colspan="2"><b>Операции</b></th>
			</thead>
			<tbody>
				<tr v-for="(user, index) in users">
					<td>{{ user.id }}</td>
					<td align="center">{{ user.name }}</td>
					<td>{{ user.access }}</td>
					<td align="center">
						<button class="btn btn-sm btn-outline-primary" title="редактировать">
							<i class="fa fa-pencil"></i>
						</button>
					</td>
					<td align="center">
						<button class="btn btn-sm btn-outline-danger" title="удалить">
							<i class="fa fa-trash"></i>
						</button>
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
				users: []
			}
		},
		methods:{

		},
		async created(){
			try {
				const res = await axios.get('/api/users');
				this.users = res.data;
				console.log(res.data);
			} catch(e) {
				console.log(e);
			}
		}
	}
</script>