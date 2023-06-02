import {defineStore} from "pinia";
import {ArticlesRootState} from "./types";

export const useArticlesStore = defineStore('articles', {
    state: (): ArticlesRootState => ({
        articles: [
            {
                id: 1,
                route: '/articles/article',
                name: 'Thyroid in Kids: Everything You Need to Know',
                image: 'tmp/blog-preview-1.jpg',
                date: '14-oct-2020',
            },
            {
                id: 2,
                route: '/articles/article',
                name: 'Thyroid in Kids: Everything You Need to Know',
                image: 'tmp/blog-preview-1.jpg',
                date: '14-oct-2020',
            },
            {
                id: 3,
                route: '/articles/article',
                name: 'Thyroid in Kids: Everything You Need to Know',
                image: 'tmp/blog-preview-1.jpg',
                date: '14-oct-2020',
            },
            {
                id: 4,
                route: '/articles/article',
                name: 'Thyroid in Kids: Everything You Need to Know',
                image: 'tmp/blog-preview-1.jpg',
                date: '14-oct-2020',
            },
            {
                id: 5,
                route: '/articles/article',
                name: 'Thyroid in Kids: Everything You Need to Know',
                image: 'tmp/blog-preview-1.jpg',
                date: '14-oct-2020',
            },
            {
                id: 6,
                route: '/articles/article',
                name: 'Thyroid in Kids: Everything You Need to Know',
                image: 'tmp/blog-preview-1.jpg',
                date: '14-oct-2020',
            },
        ]
    })
})
