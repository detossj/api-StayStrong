<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoutineVideo;

class RoutineVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        RoutineVideo::insert([
            [
                'title' => 'Rutina de cuerpo completo en casa (sin equipo)',
                'description' => '30 minutos de entrenamiento sin equipo con MadFit.',
                'video_url' => 'https://www.youtube.com/watch?v=ml6cT4AZdqI',
                'duration_minutes' => 30,
            ],
            [
                'title' => 'Abdomen plano con Pamela Reif',
                'description' => 'Rutina intensa de abdominales en casa.',
                'video_url' => 'https://www.youtube.com/watch?v=AnYl6Nk9GOA',
                'duration_minutes' => 10,
            ],
            [
                'title' => 'Rutina HIIT para quemar grasa',
                'description' => 'Cardio intenso para quemar calorías rápido.',
                'video_url' => 'https://www.youtube.com/watch?v=50kH47ZztHs',
                'duration_minutes' => 20,
            ],

            [
                'title' => 'Consigue abdominales en 60 días usando la ciencia.',
                'description' => 'Explicación científica y ejemplos prácticos.',
                'video_url' => 'https://www.youtube.com/watch?v=vUZvINfVP28',
                'duration_minutes' => 11,
            ],
            [
                'title' => 'Los Mejores y Peores Ejercicios para Bíceps.',
                'description' => 'Jeff Nippard muestra cómo entrenar abs correctamente.',
                'video_url' => 'https://www.youtube.com/watch?v=eCynxTXeuJU',
                'duration_minutes' => 17,
            ],

            [
                'title' => 'Los Mejores y Peores Ejercicios para Glúteos Clasificados Según la Ciencia',
                'description' => '¿Estás entrenando glúteos pero no ves resultados? Tal vez no estés eligiendo los ejercicios correctos.',
                'video_url' => 'https://www.youtube.com/watch?v=f0Hvw5oLabQ',
                'duration_minutes' => 16,
            ],
            [
                'title' => 'Dumbbell Only Workout (BUFF DUDES)',
                'description' => 'Rutina solo con mancuernas.',
                'video_url' => 'https://www.youtube.com/watch?v=U0bhE67HuDY',
                'duration_minutes' => 22,
            ],

            [
                'title' => 'CARDIO para ADELGAZAR Rapido / Cardio para Quemar Grasa',
                'description' => 'Rutina efectiva sin salir de casa.',
                'video_url' => 'https://www.youtube.com/watch?v=A7-cLObbFEU',
                'duration_minutes' => 28,
            ],
            [
                'title' => 'Semana COMPLETA de rutinas - Entrena todo el cuerpo!',
                'description' => 'Semana completa de rutinas con explicaciones de cada ejercicio.',
                'video_url' => 'https://www.youtube.com/watch?v=xP4iItH8HBU',
                'duration_minutes' => 20,
            ],

            [
                'title' => '5 ejercicios para una rutina de piernas completa.',
                'description' => '5 ejercicios para una rutina de piernas completa.',
                'video_url' => 'https://www.youtube.com/watch?v=Z2X5w4_eiH8',
                'duration_minutes' => 11,
            ],
            [
                'title' => '¡Los 2 ÚNICOS ejercicios que necesitas para una ESPALDA ancha!.',
                'description' => 'En este video te revelo los 2 ÚNICOS ejercicios que realmente necesitas para desarrollar una espalda ancha',
                'video_url' => 'https://www.youtube.com/watch?v=uwhJZsDgYLQ',
                'duration_minutes' => 10,
            ],
            [
                'title' => 'Rutina de Hombro - TODAS Las Cabezas del Hombro.',
                'description' => 'rutina para entrenar todas las cabezas del hombro: laterales, frontales, posteriores y hombro en general',
                'video_url' => 'https://www.youtube.com/watch?v=035zhh_pi50',
                'duration_minutes' => 5,
            ],
            [
                'title' => 'Rutina Completa de Pecho y Tríceps: Ejercicios Detallados.',
                'description' => ' entrenamiento de Pecho y biceps con todos los ejercicios que necesitas para estimular todas las caras del pecho asi como tambien los triceps.',
                'video_url' => 'https://www.youtube.com/watch?v=UvwvK2VA8I4',
                'duration_minutes' => 13,
            ],
            [
                'title' => '6 Ejercicios para piernas y gluteos brutales.',
                'description' => 'Ejercitaran los cuadriceps, glúteos, isquiotibiales (bicep femoral), aductores, pantorrillas, entre otros musculos.',
                'video_url' => 'https://www.youtube.com/watch?v=XYJ6f_1Fkjg',
                'duration_minutes' => 20,
            ],
            [
                'title' => 'El 90% de las Personas se Vuelven FLEXIBLES con Estos 5 Estiramientos.',
                'description' => 'Si no eres flexible pero te gustaría ver los beneficios del estiramiento, estás en el lugar indicado.',
                'video_url' => 'https://www.youtube.com/watch?v=dWP21xiEq3k',
                'duration_minutes' => 8,
            ],
            [
                'title' => 'Rutina Abdominales 10 Minutos ¡Abdomen Marcado Garantizado!.',
                'description' => 'Si buscas un entrenamiento de abdominales que puedas hacer durante los próximos 28 días para conseguir un abdomen marcado, estás en el lugar indicado.',
                'video_url' => 'https://www.youtube.com/watch?v=1gG2tvNYplY',
                'duration_minutes' => 11,
            ],
            [
                'title' => 'Los 5 Mejores Ejercicios para PECHO (Guía Definitiva).',
                'description' => 'En este vídeo te explico los 5 mejores ejercicios para desarrollar un pectoral completo, fuerte y estético.',
                'video_url' => 'https://www.youtube.com/watch?v=dnfdneIJrNI',
                'duration_minutes' => 17,
            ],
            [
                'title' => 'Los 8 Ejercicios MÁS EFECTIVOS para Ganar Músculo',
                'description' => 'Si no ves las ganancias que esperas, probablemente no sea por falta de esfuerzo, sino por no haber elegido bien los ejercicios. ',
                'video_url' => 'https://www.youtube.com/watch?v=jD2wRNxIgM0',
                'duration_minutes' => 25,
            ],
            [
                'title' => 'La Rutina PERFECTA de Bíceps Basada en Ciencia (Edición 2025)',
                'description' => 'Evita los errores más comunes con estos consejos.',
                'video_url' => 'https://www.youtube.com/watch?v=QO1qtm6ftOc',
                'duration_minutes' => 11,
            ],
            [
                'title' => 'Cree una Rutina de Piernas Perfecta para el Gym',
                'description' => '',
                'video_url' => 'https://www.youtube.com/watch?v=F0-vWlLaVPM',
                'duration_minutes' => 21,
            ],
            [
                'title' => 'Quitar Grasa Abdominal - Haz Este Ejercicio por Solo 7 MINUTOS Todos los Días',
                'description' => 'Hola guerrero, en este video te mostraré la rutina de tan solo 7 minutos para quitar grasa abdominal. ',
                'video_url' => 'https://www.youtube.com/watch?v=od3-9N0zhDE&t=8s',
                'duration_minutes' => 16,
            ],
            [
                'title' => 'CÓMO EMPEZAR a ENTRENAR CALISTENIA en CASA',
                'description' => 'He decidido compartiros una rutina de cuerpo entero o fullbody dedicada a principiantes que quieren saber cómo empezar a entrenar calistenia en CASA desde 0!',
                'video_url' => 'https://www.youtube.com/watch?v=2PVk2wUY04k&ab_channel=NicoReyero',
                'duration_minutes' => 10,
            ],
            [
                'title' => 'Cómo empezar en el gym en 2025: Guía definitiva para principiante',
                'description' => 'Cómo empezar en el gym en 2025 puede parecer un desafío, pero con esta guía definitiva para principiantes, estarás listo para transformar tu vida.',
                'video_url' => 'https://www.youtube.com/watch?v=w_0hSr5U-2U&ab_channel=BenjaminTrainer',
                'duration_minutes' => 19,
            ],
            [
                'title' => 'CÓMO Crear la rutina de Entrenamiento Perfecta',
                'description' => '¿Quieres una rutina de entrenamiento que realmente funcione? En este video te enseño paso a paso cómo diseñar la rutina perfecta según tu nivel, objetivos y disponibilidad.',
                'video_url' => 'https://www.youtube.com/watch?v=XW0SnJZOxWo',
                'duration_minutes' => 16,
            ],
        ]);
    }
}
