import CollapsibleResourceManager from './components/CollapsibleResourceManager'

Nova.booting((Vue, router, store) => {
    Vue.component('admin-navigation', CollapsibleResourceManager)
})
