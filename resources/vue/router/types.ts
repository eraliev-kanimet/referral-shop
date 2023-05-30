import {NavigationGuardNext, RouteLocationNormalized} from "vue-router";

export interface MiddlewareContext {
    to: RouteLocationNormalized;
    from: RouteLocationNormalized;
    next: NavigationGuardNext;
}

export type Middleware = (context: MiddlewareContext) => void;
