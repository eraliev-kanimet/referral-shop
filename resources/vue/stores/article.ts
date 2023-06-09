import {defineStore} from "pinia";

export type ArticlesItem = {
    id: number,
    route: string,
    name: string,
    image: string,
    date: string,
}

type ArticleRootState = {
    articles: ArticlesItem[]
}

export const useArticleStore = defineStore('article', {
    state: (): ArticleRootState => ({
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
