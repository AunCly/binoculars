<template>
	<div>
		<b-sidebar no-close-on-route-change visible id="sidebar-footer" aria-label="Sidebar with custom footer" no-header shadow>
			<b-nav vertical class="w-25">
				<ul>
					<li>
						<b-nav-item>
							<router-link :to="{name:'binoculars-structure'}" class="control-action">
								Structure
							</router-link>
						</b-nav-item>
					</li>
					<li>MENU 2</li>
					<li>MENU 3</li>
				</ul>
			</b-nav>
		</b-sidebar>
	</div>
</template>

<script>
import axios from 'axios'

export default {
	data() {
		return {
			items: null,
		}
	},
	mounted() {
		this.loadNavigation()
	},
	methods: {
		loadNavigation() {
			axios.get('/api/binoculars/tables').then(response => {
				this.items = response.data
			}).catch(error => {
				// console.log(error)
			})
		}
	}
}
</script>