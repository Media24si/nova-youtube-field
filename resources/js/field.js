import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app) => {
    app.component('index-nova-youtube-field', IndexField)
    app.component('detail-nova-youtube-field', DetailField)
    app.component('form-nova-youtube-field', FormField)
})
