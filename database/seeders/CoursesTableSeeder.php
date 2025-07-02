<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Khoá học 1',
                'short_description' => 'Đây là mô tả ngắn mẫu có thể thay thế',
                'description' => 'Đây là nội dung mô tả chi tiết mẫu có thể thay thế bằng nội dung thực tế',
                'image' => 'course1.jpg',
            ],
            [
                'title' => 'Khoá học 2',
                'short_description' => 'Đây là mô tả ngắn mẫu có thể thay thế',
                'description' => 'Đây là nội dung mô tả chi tiết mẫu có thể thay thế bằng nội dung thực tế',
                'image' => 'course2.jpg',
            ],
            [
                'title' => 'Khoá học 3',
                'short_description' => 'Đây là mô tả ngắn mẫu có thể thay thế',
                'description' => 'Đây là nội dung mô tả chi tiết mẫu có thể thay thế bằng nội dung thực tế',
                'image' => 'course3.jpg',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
