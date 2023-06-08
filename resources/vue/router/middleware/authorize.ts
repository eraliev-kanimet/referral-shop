import {MiddlewareContext} from "../types";

import {useUserStore} from "../../stores/user";

export default async function ({next}: MiddlewareContext) {
    const userStore = useUserStore()

    if (userStore.isAuth) {
        return next({
            name: 'dashboard'
        })
    }

    return next()
}
