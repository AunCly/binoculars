export default [

  {
    path: '/',
    name: 'binoculars-index',
    component: require('./screens/index').default,
  },
  {
    path:'/structure',
    name:'binoculars-structure',
    component: require('./screens/structure').default,
  },
  {
    path:'/tables/:table/datas',
    name:'binoculars-table-datas',
    component: require('./screens/table/datas').default,
  },
  {
    path:'/tables/:table/structure',
    name:'binoculars-table-structure',
    component: require('./screens/table/structure').default,
  },

];