<template>
	<div>
		<table-naviguation></table-naviguation>
		<b-card no-body>
			<b-row>
				<b-col>
					<b-table striped hover show-empty :items="items">
						<template #empty="scope">
							<h4>No datas</h4>
						</template>
					</b-table>
					<b-pagination
						v-if="items !== []"
						v-model="currentPage"
						:total-rows="total"
						:per-page="perPage"
						aria-controls="my-table"
						@change="updateTable"
					></b-pagination>
				</b-col>
			</b-row>
		</b-card>
	</div>
</template>

<script>
import axios from 'axios'

export default {

	data() {
		return {
			items: [],
			currentPage: 1,
			total: null,
			perPage: 15,
		}
	},
	mounted() {
		this.loadTable()
	},
	created() {
		// watch the params of the route to fetch the data again
		this.$watch(
			() => this.$route.params,
			() => {
				this.loadTable()
			},
			// fetch the data when the view is created and the data is
			// already being observed
			{ immediate: true }
		)
	},
	methods: {
		updateTable(page){
			this.currentPage = page
			this.loadTable()
		},
		loadTable() {
			axios.get('/api/binoculars/tables/' + this.$route.params.table, { params : {
					currentPage: this.currentPage,
					perPage: this.perPage,
				}}).then(response => {
				let datas = response.data
				this.items = datas.data
				this.currentPage = datas.current_page
				this.total = datas.total
				this.perPage = datas.per_page
			}).catch(error => {
				console.log(error)
			})
		}
	}
}
</script>