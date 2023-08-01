import { createStore } from "vuex"

import * as actions from './actions'
import * as mutations from './mutations'
const store = createStore({
    state:{

        user:{
            token: sessionStorage.getItem('TOKEN'),
            data:{}
        }
    },
    getters:{},
    actions: actions,
    mutations: mutations
})


export default store