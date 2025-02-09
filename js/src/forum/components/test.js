import Page from 'flarum/components/Page'

export default class test extends Page {
    view() {
        return m('div', "Hello World")
    }
}