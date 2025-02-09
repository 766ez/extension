import app from 'flarum/common/app';

app.initializers.add('zen-test-common', () => {
  console.log('[zen/test] Hello, forum and admin!');
});
