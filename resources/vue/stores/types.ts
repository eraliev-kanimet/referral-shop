
type TestimonialsItem = {
    id: number,
    name: string,
    address: string,
    avatar?: string,
    initial: string,
    content: string
}

type FaqItem = {
    id: number,
    question: string,
    answer: string,
}

export type SiteRootState = {
    testimonials: TestimonialsItem[],
    faq: FaqItem[],
    country: string,
    is_loading: boolean
}

export type ArticlesItem = {
    id: number,
    route: string,
    name: string,
    image: string,
    date: string,
}

export type ArticlesRootState = {
    articles: ArticlesItem[]
}

export type User = {
    id: number,
    name: string,
    email: string,
    phone: string,
}

export type UserRootState = {
    user: User|null,
    isAuth: boolean,
    token: string
}
