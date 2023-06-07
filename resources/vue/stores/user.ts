import {defineStore} from "pinia";
import {User, UserRootState} from "./types";

export const useUserStore = defineStore('user', {
    state: (): UserRootState => ({
        user: null,
        isAuth: false,
        token: localStorage.getItem('token') ?? ''
    }),
    actions: {
        setUser(user: User, token: string, rememberMe: boolean = true) {
            this.user = user;
            this.token = token;
            this.isAuth = true

            if (rememberMe) {
                localStorage.setItem('token', token)
            }
        }
    }
})
