<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // blog data
        $data = [
            // blog 1
            [
                'title' => 'GIRL WHO CODE.',
                'image' => 'blog1.png',
                'description' => 'To Celebrate In Women Days, here as paragraphs written by the Women of our Team - Sopheaktra, Sreyrot & Hana.',
                'detail' => "My name is Sopheaktra Ros. I am 21 years old and I am from Kampong Cham province. And I am an IT student and work on it. To celebrate International Women's Day on March 8. I would like to share my experience of studying and working. After I graduated from high school, my family did not have enough money to pay for university, but fortunately, I received a scholarship from PNC. Learning IT until I can go to work is very difficult and I have hard that no woman learns IT, and I never know it before, it makes me more difficult, but it never makes me give up. This effort has given me a good job in Vicheasolution Company. The work was hard, but I still never gave up, I still tried to learn from the company such as hard skills (coding) and soft skills such as communication and time management, and teamwork. At the company, my boss liked and helped teach me, so I learned a lot from the company. All of this makes me a woman who wants to be strong and smart in the field of information technology and have a good job in life and can help my family and society. - Sopheaktra My name is Sreyrot Oun. I am 21 years old, I am from Oddarmeanchey province. I am the one who come from a medium family. After finished Bac II I planned to continue my study in Phnom Penh, at the same time I have heard some word from my neighbor that “As a girl should not goes far from home, just finish study in high school it is enough”. It was motivate me to overcome the all that people by trying hard to cam to Phnom Penh, and learned as a scholarship student at in PNC that required me to learn in 2 years with the major of Web Programming, and I got success in my studying as well. After finished PNC I have a good chance to find a good job that fit with my skill such now I work at Vichea Solutions as a Junior Laravel Developer. So, I would like to say that it is possible for me to do what I want. It is not depend on the other one, and the other woman also can do it like me or better than me depend on the commitment to become self-sufficient. - Sreyrot Hi, I am Hana. A designer at vicheasolutions. This is a little bit of my story, how I chase my dream. That's start from when I have decided to study Design because I found out that art makes me happy and is so different. I like surrounding myself with inspiring images and I can also become part of a global community. As a student of Law by luck, I never thought that I can become a designer and I always thought that is it too late to start learning a skill that I love. But you are never too old to start a new journey to your dream! I decided to leave my province, and all my comfort zone so I can start my plan. With the color of light in the city, I start working from the receptionist to the legal associate. Customer representative to QA tester. From QA tester to Graphic designer. And now I am ready to jump to catch my dream job as a UI/UX designer. Well, why I kinda have a lot of steps for that? why don't I just become what I want? because sometimes you don't have to focus on 0 to 100. Just focus on going 0 to 10, 10 to 20 then 20 to 30. And so on until you get 100. Believe me, everyone can become the best version of themself. :slightly_smiling_face: - Hana",
                'user_id' => 1,
            ],
            
            // blog 2
            [
                'title' => 'Blog 2',
                'image' => 'blog2.png',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry is simply dummy text of the printing and typesetting',
                'detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry is simply dummy text of the printing and typesetting',
                'user_id' => 1,
            ],
            
            // blog 3
            [
                'title' => 'Blog 3',
                'image' => 'blog3.png',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry is simply dummy text of the printing and typesetting',
                'detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry is simply dummy text of the printing and typesetting',
                'user_id' => 1,
            ],

            // blog 4
            [
                'title' => 'Blog 4',
                'image' => 'blog1.png',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry is simply dummy text of the printing and typesetting',
                'detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry is simply dummy text of the printing and typesetting',
                'user_id' => 1,
            ],

            // blog 5
            [
                'title' => 'Blog 5',
                'image' => 'blog2.png',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry is simply dummy text of the printing and typesetting',
                'detail' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry is simply dummy text of the printing and typesetting',
                'user_id' => 1,
            ],

        ];

        // seed data into database
        foreach($data as $dataRow) {
            Blog::create($dataRow);
        }
    }
}
