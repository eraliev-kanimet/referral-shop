import {createRouter, createWebHistory} from "vue-router";
import {Middleware, MiddlewareContext} from "./types";

import {useSiteStore} from "../stores/site";

import routes from "./routes";

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior: () => {
        return {top: 0, behavior: 'smooth'}
    }
});

function middlewarePipeline(context: MiddlewareContext, middleware: Middleware[], index: number): () => void {
    const nextMiddleware = middleware[index];
    if (!nextMiddleware) {
        return context.next;
    }

    return () => {
        const nextPipeline = middlewarePipeline(context, middleware, index + 1);
        nextMiddleware({ ...context, next: nextPipeline });
    };
}

router.beforeEach(async (to, from, next) => {
    await useSiteStore().init()

    if (!to.meta.middleware) {
        return next();
    }

    const middleware: Middleware[] = to.meta.middleware as Middleware[]; // Add type assertion here
    const context: MiddlewareContext = {
        to,
        from,
        next
    };

    return middleware[0]({
        ...context,
        next: middlewarePipeline(context, middleware, 1)
    });
});

export default router;


