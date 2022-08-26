<template>
	<div>
		<b-nav>
			<b-nav-item active>
				<router-link :to="{name:'binoculars-table-datas', params: {table: this.$route.params.table }}" class="control-action">
					Données
				</router-link>
			</b-nav-item>
			<b-nav-item>
				<router-link :to="{name:'binoculars-table-structure', params: {table: this.$route.params.table }}" class="control-action">
					Structure
				</router-link>
			</b-nav-item>
			<b-nav-item>Sql</b-nav-item>
			<b-nav-item>Détails</b-nav-item>
		</b-nav>
	</div>
</template>