<?php

namespace Database\Seeders;

use App\Models\PageItem;
use Illuminate\Database\Seeder;

class PageItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page_item = new PageItem();
        $page_item->page_id     = '1';
        $page_item->active      = true;
        $page_item->title       = 'Impact Investment';
        $page_item->description     = 'Investments made with an objective to create positive, measurable social and environmental impact in conjunction with a financial return are referred to as impact investment. Impact investments can be made in both emerging and developed markets and target a return depending on investors’ strategic goals. The growing impact investment market provides fund to address the world’s most pressing challenges in sectors such as sustainable energy, agriculture, microfinance, eCommerce, and affordable and accessible essential services including housing, healthcare, and education.';
        $page_item->image           = null;
        $page_item->show_on_home           = true;
        $page_item->save();

        $page_item = new PageItem();
        $page_item->page_id     = '1';
        $page_item->active      = true;
        $page_item->title       = 'Digital Entrepreneurship';
        $page_item->description     = 'The process of creating a new internet enabled businesses, products, or services, not only through startups, but also through the digital transformation of an existing business function inside a firm or the public sector. It is predicted that 70% of new value creation in the economy over the next decade will be based on digitally enabled platform business models. Entrepreneurs are rapidly adopting a platform approach that can enable multiple players to solve various social issues together and create value for all parties involved. This will facilitate greater economic participation from marginalized populations.';
        $page_item->image           = null;
        $page_item->show_on_home           = true;
        $page_item->save();

        $page_item = new PageItem();
        $page_item->page_id     = '1';
        $page_item->active      = true;
        $page_item->title       = 'Digital Healthcare';
        $page_item->description     = 'Digital healthcare is a cultural transformation initiated by advanced technologies that lead to an equal-level partnership between patients and their caregivers. In developing countries, the healthcare sector is significantly behind other sectors in terms of using data and technology. With digital healthcare, the traditional means of patientcare will be replaced by a less error prone and well-integrated healthcare ecosystem that will alleviate pain, reinstate health, and ensure wellbeing of people.';
        $page_item->image           = null;
        $page_item->show_on_home           = true;
        $page_item->save();

        $page_item = new PageItem();
        $page_item->page_id     = '1';
        $page_item->active      = true;
        $page_item->title       = 'Digital Education';
        $page_item->description     = 'Digital education is about utilizing digital technologies and tools to deliver education while empowering the learner. It has revolutionized the traditional process of learning in classrooms and made learning mobile, interactive and engaging. Digital education can enable a student residing in any region of the world to get education from the best educators, schools, and universities through digital platforms. It will allow students to have access to unlimited information on any subject, increasing study efficiency and achieving better results in learning – and will eventually deliver the promise of education for all.';
        $page_item->image           = null;
        $page_item->show_on_home           = true;
        $page_item->save();

        $page_item = new PageItem();
        $page_item->page_id     = '1';
        $page_item->active      = true;
        $page_item->title       = 'Smart City Initiatives';
        $page_item->description     = 'Refers to initiatives that effectively leverage digitalization to boost citizen well-being and deliver more efficient, sustainable, and inclusive urban services and environments. Smart city technologies are being developed more rapidly in emerging markets as more pressing needs create better conditions for radical innovation and rapid scale. Startups are playing a vital role in the construction of smart city with their innovation and ability to connect their technological resources in bringing solutions to urban challenges.';
        $page_item->image           = null;
        $page_item->show_on_home           = true;
        $page_item->save();
    }
}
