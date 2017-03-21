/** Actions are similar to mutations, the difference being that:

Instead of mutating the state, actions commit mutations.
Actions can contain arbitrary asynchronous operations.
**/
// actions are functions that causes side effects and can involve
// asynchronous operations.

//Examples:::

export const increment = ({ commit }) => commit('increment')

export const decrement = ({ commit }) => commit('decrement')

