<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.settings.index', [
            'setting' => SpladeTable::for(Setting::class)
                ->withGlobalSearch(columns: ['title', 'description'])

                ->column('welcome_text', label: "Текст блока с фото с права")
                ->column('welcome_img', label: "Фото для блока с права")

                ->column('conductor_text', label: "Текст блока с фото с лево")
                ->column('conductor_img', label: "Фото для блока с лево")

                ->column('musem_text', label: "Текст блока с фото с лево")
                ->column('musem_img', label: "Фото для блока с лево")

                ->column('pred_footer_text', label: "Фото для блока с лево")

                ->column('action', label: "Действие", canBeHidden: false)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'logo_img' => 'nullable|image',
            'number' => 'required|string',
            'address' => 'required|string',

            'welcome_text' => 'required|string',
            'welcome_img' => 'nullable|image',

            'conductor_text' => 'required|string',
            'conductor_img' => 'nullable|image',

            'musem_text' => 'required|string',
            'musem_img' => 'nullable|image',

            'pred_footer_text' => 'required|string',

        ]);

        $company = Setting::findOrNew(1);
        $company->fill($validatedData);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $company->logo = $logoPath;
        }

        $company->save();

        return redirect()->route('settings.index', $company->id)
            ->with('success', 'Company information updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        return view('admin.settings.create', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $validatedData = $request->validate([
            'welcome_text' => 'required|string',
            'welcome_img' => 'nullable|image',

            'conductor_text' => 'required|string',
            'conductor_img' => 'nullable|image',

            'musem_text' => 'required|string',
            'musem_img' => 'nullable|image',

            'pred_footer_text' => 'required|string',
        ]);

        $company = Setting::findOrNew(1);
        $company->fill($validatedData);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $company->logo = $logoPath;
        }

        $company->save();

        return redirect()->route('settings.index', $company->id)
            ->with('success', 'Company information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        $setting->delete();
        Toast::title('Настройка удалена');
        return redirect()->route('setting.index');
    }
}
