<template>
	<div>
		<b-table striped hover :items="tables" :fields="fields">
			<template #cell(name)="data">
				<router-link :to="{name:'binoculars-table-datas', params:{table: data.value }}" class="control-action">
					{{ data.value }}
				</router-link>
			</template>
			<template #cell(tbl_name)="data">
				<b>{{ data.value.toUpperCase() }}</b>

			</template>
		</b-table>
	</div>
</template>

<script>
import axios from 'axios'

export default {
	data() {
		return {
			tables: null,
			fields: [
				{ key: 'name', name: 'name', label: 'Name' },
				{ key: 'tbl_name', name: 'tbl_name', label: 'Table Name' },
				{ key: 'nb_columns', name: 'nb_columns', label: 'Columns' },
			]
		}
	},
	mounted() {
		this.loadTable()
	},
	methods: {
		loadTable() {
			axios.get('/api/binoculars/tables').then(response => {
				console.log(response.data)
				this.tables = response.data
			}).catch(error => {
				console.log(error)
			})
		}
	}
}
</script>