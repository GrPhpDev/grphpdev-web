App = Ember.Application.create({});
App.ApplicationAdapter = DS.RESTAdapter.extend({
    namespace: 'api'
});

App.Location = DS.Model.extend({
    name: DS.attr('string'),
    address1: DS.attr('string'),
    address2: DS.attr('string'),
    city: DS.attr('string'),
    stateProvince: DS.attr('string'),
    postalCode: DS.attr('string'),
    latitude: DS.attr('numeric'),
    longitude: DS.attr('numeric')
});

App.Sponsor = DS.Model.extend({
    name: DS.attr(),
    image: DS.attr(),
    imageUrl: function () {
        return '/images/sponsors/' + this.get('image')
    }.property('image')
});

App.Member = DS.Model.extend({
    name: DS.attr('string'),
    talks: DS.hasMany('talks')
});

App.Talk = DS.Model.extend({
    title: DS.attr('string'),
    description: DS.attr('string'),
    speaker: DS.belongsTo('member'),
    event: DS.belongsTo('event')
});

App.Event = DS.Model.extend({
    title: DS.attr('string'),
    description: DS.attr('string'),
    talks: DS.hasMany('talks')
});

App.Router.map(function() {
    this.resource('about');
    this.resource('events');
    this.route('event-view', {path: 'events/:event_id'});
    this.resource('sponsors');
});

App.IndexRoute = Ember.Route.extend({
    model: function () {
        return {
            events: this.store.find('event'),
            sponsors: this.store.find('sponsor')
        }
    }
});

App.EventsRoute = Ember.Route.extend({
    model: function() {
        return this.store.find('event');
    }
});

App.EventViewRoute = Ember.Route.extend({
    model: function(params) {
        return this.store.find('event', params.event_id);
    }
});

App.SponsorsRoute = Ember.Route.extend({
    model: function() {
        return this.store.find('sponsor');
    }
});

Ember.Handlebars.helper('format-date', function(date) {
  return moment(date).format('LLL');
});

Ember.Handlebars.helper('break-lines', function(text) {
    text = Handlebars.Utils.escapeExpression(text);
    text = text.replace(/(\r\n|\n|\r)/gm, '<br>');
    return new Handlebars.SafeString(text);
});

