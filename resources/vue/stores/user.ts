import {defineStore} from "pinia";
import {UserRootState} from "./types";

export const useUserStore = defineStore('user', {
    state: (): UserRootState => ({
        user: null,
        isAuth: false
    })
})
