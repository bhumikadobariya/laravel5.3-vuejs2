// mutations are operations that actually mutates the state.
// each mutation handler gets the entire state tree as the
// first argument, followed by additional payload arguments.
// mutations must be synchronous and can be recorded by plugins
// for debugging purposes.

export const AUTH_USER_DATA = (state, user) => {
  state.auth_user = user
}
export const ALL_USERS = (state, users) => {
  state.users = users
}
export const ADD_NEW_USER = (state, userData) => {
  state.users.data.push(userData);
}
export const ALL_CLIENTS = (state, clients) => {
  state.clients = clients
}
export const ALL_PERSONAL_ACCESS_TOKENS = (state, tokens) => {
  state.tokens = tokens
}
export const EDIT_USER = (state, payload) => {
  var users = _.cloneDeep(state.users.data);

  var key = _.findKey(users, function(o) {
    return String(o.id) === String(payload.data.id);
  })

  users[key] = payload.data;
  state.users.data = users;
}
export const DELETE_USER = (state, userData) => {
  var users =  _.cloneDeep(state.users.data);
  _.remove(users, function(o) {
    return o.id === userData.id
  });
  state.users.data = users;
}
export const FETCH_USER_FOR_EDIT = (state, get_user_edit) => {
  state.get_user_edit = get_user_edit
}
export const ERRORS = (state, errors) => {
  state.errors = errors
}
export const UPDATE_DATA = (state, payload) => {
  const { attribute, value } = payload;
  state.get_user_edit[attribute] = value;
}
