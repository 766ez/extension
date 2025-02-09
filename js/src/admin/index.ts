import app from 'flarum/admin/app';

export { default as extend } from './extend';

app.initializers.add('zen-test', () => {
  console.log('[zen/test] Hello, admin!');
});
