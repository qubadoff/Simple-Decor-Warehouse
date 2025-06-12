<?php

namespace App\Http\Controllers;

use App\Enum\Decor\DecorStatusEnum;
use App\Models\ContactMessage;
use App\Models\Decor;
use App\Models\DecorCategory;
use App\Models\DecorOrder;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(): View
    {
        $decorCategories = DecorCategory::all();

        $decors = Decor::query()->where('status', DecorStatusEnum::ACTIVE)->orderBy('created_at', 'desc')->paginate(30);

        return view('Frontend.index', compact('decorCategories', 'decors'));
    }

    public function about(): View
    {
        return view('Frontend.about');
    }

    public function contact(): View
    {
        return view('Frontend.contact');
    }

    public function singleDecor($id): View
    {
        $decor = Decor::query()->where('status', DecorStatusEnum::ACTIVE)->findOrFail($id);

        return view('Frontend.singleDecor', compact('decor'));
    }

    public function singleDecorCategory($id): View
    {
        $decorCategory = DecorCategory::query()->findOrFail($id);

        $decorCategories = DecorCategory::all();

        $decors = Decor::query()
            ->where('category_id', $decorCategory->id)
            ->where('status', DecorStatusEnum::ACTIVE)
            ->orderBy('created_at', 'desc')
            ->paginate(30);

        return view('Frontend.singleDecorCategory', compact('decorCategory', 'decors', 'decorCategories'));
    }

    public function fastContact(Request $request): RedirectResponse
    {
        $request->validate([
            'phone' => 'required|max:20',
        ]);

        ContactMessage::query()->create([
            'name' => 'Fast Contact',
            'phone' => $request->input('phone'),
            'message' => 'I need Fast Contact',
        ]);

        return redirect()->route('index')->with('success', 'Zəng uğurla sifariş edildi !');
    }

    public function sendMessage(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:50',
            'phone' => 'required|max:20',
            'message' => 'required|max:5000',
        ]);

        ContactMessage::query()->create($request->all());

        return redirect()->route('contact')->with('success', 'Mesajınız uğurla göndərildi !');

    }

    public function decorOrder(Request $request): RedirectResponse
    {
        $request->validate([
            'decor_id' =>  'required|exists:decors,id',
            'name' => 'required|max:50',
            'phone' => 'required|max:20',
            'location' => 'required|max:500',
            'order_date' => 'required|date',
            'message' => 'required|max:1000',
        ]);

        DecorOrder::query()->create([
            'decor_id' => $request->input('decor_id'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'location' => $request->input('location'),
            'order_date' => $request->input('order_date'),
            'message' => $request->input('message'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route("decorOrderSuccess")->with('success', 'Sifarişiniz uğurla qeydə alındı ! Təşəkkür edirik ! Ən qısa zamanda əməkdaşlarımız sizinlə əlaqə saxlyacaqlar.');
    }

    public function decorOrderSuccess(): View
    {
        return view('Frontend.decorOrderSuccess');
    }
}
