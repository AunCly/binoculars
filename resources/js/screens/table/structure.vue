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
	methods: {
		loadTable() {
			axios.get('/api/binoculars/tables/' + this.$route.params.table  +'/structure').then(response => {
				this.items = response.data
			}).catch(error => {
				console.log(error)
			})
		}
	}
}
</script>