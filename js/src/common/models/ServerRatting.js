import Model from 'flarum/common/Model';

// For more details about frontend models
// checkout https://docs.flarum.org/2.x/extend/models.html#frontend-models

export default class ServerRatting extends Model {
  title = Model.attribute('title');
  createdAt = Model.attribute('createdAt', Model.transformDate);
}
