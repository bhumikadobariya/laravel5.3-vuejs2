// getters are functions

export const auth_user_data = state => {
  return state.auth_user
}
export const all_users = state => {
  return state.users
}
export const all_clients = state => {
  return state.clients
}
export const all_tokens = state => {
  return state.tokens
}
export const edit_user_data = state => {
  return state.get_user_edit
}
export const errors = state => {
  return state.errors
}
