
import { type SharedData } from '@/types';
import {  usePage } from '@inertiajs/react';
import { type PropsWithChildren } from 'react';

interface AuthLayoutProps {
    title?: string;
    description?: string;
}

export default function AuthSplitLayout({ children, title, description }: PropsWithChildren<AuthLayoutProps>) {
    const { name } = usePage<SharedData>().props;

    return (
        <div className="relative grid h-dvh flex-col items-center justify-center px-8 sm:px-0 lg:max-w-none lg:grid-cols-2 lg:px-0">
            <div className="relative hidden h-full flex-col bg-muted p-10 text-white lg:flex dark:border-r animate-in slide-in-from-left duration-700">
                <div className="absolute inset-0 bg-gradient-to-br from-blue-900/90 to-indigo-900/90 animate-in fade-in duration-1000" />
                <div className="absolute inset-0 bg-cover bg-center opacity-20 animate-in zoom-in duration-1000 delay-300" style={{backgroundImage: 'url(/logo.jpg)'}} />
                
                <div className="relative z-20 mt-auto animate-in slide-in-from-bottom duration-700 delay-500">
                    <blockquote className="space-y-4">
                        <p className="text-xl font-light animate-in fade-in duration-700 delay-700">&ldquo;Formando profesionales para el futuro&rdquo;</p>
                        <div className="space-y-2 animate-in slide-in-from-left duration-500 delay-1000">
                            <p className="text-sm text-blue-200">Instituto de Educación Superior</p>
                            <p className="text-xs text-blue-300">Excelencia Académica • Innovación • Compromiso Social</p>
                        </div>
                    </blockquote>
                </div>
            </div>
            <div className="w-full lg:p-8 animate-in slide-in-from-right duration-700">
                <div className="mx-auto flex w-full flex-col justify-center space-y-6 sm:w-[350px]">
                   
                    <div className="flex flex-col items-start gap-2 text-left sm:items-center sm:text-center animate-in fade-in duration-500 delay-300">
                        <h1 className="text-xl font-medium animate-in slide-in-from-top duration-500 delay-500">{title}</h1>
                        <p className="text-sm text-balance text-muted-foreground animate-in fade-in duration-500 delay-700">{description}</p>
                    </div>
                    <div className="animate-in slide-in-from-bottom duration-500 delay-700">
                        {children}
                    </div>
                </div>
            </div>
        </div>
    );
}
