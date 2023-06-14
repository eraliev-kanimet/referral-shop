import {defineStore} from "pinia";

import router from "../router";

export type User = {
    id: number,
    name: string,
    email: string,
    phone: string,
}

type UserRootState = {
    user: User|null,
    isAuth: boolean,
    token: string
}

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
        },
        async logout() {
            this.isAuth = false
            this.token = ''

            localStorage.removeItem('token')

            await router.push({name: 'login'})
        }
    }
})
