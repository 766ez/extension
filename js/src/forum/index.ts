import app from 'flarum/forum/app';
import test from "./components/test";
import extend from './extend';

export { default as extend } from './extend';

app.initializers.add('zen-test', () => {
    console.log("a")
  app.routes["test"] = {
    path: '/test',
    component: test
  }
});
