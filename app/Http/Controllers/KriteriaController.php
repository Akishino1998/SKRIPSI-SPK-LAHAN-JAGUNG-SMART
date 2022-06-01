<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKriteriaRequest;
use App\Http\Requests\UpdateKriteriaRequest;
use App\Repositories\KriteriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class KriteriaController extends AppBaseController
{
    /** @var KriteriaRepository $kriteriaRepository*/
    private $kriteriaRepository;

    public function __construct(KriteriaRepository $kriteriaRepo)
    {
        $this->kriteriaRepository = $kriteriaRepo;
    }

    /**
     * Display a listing of the Kriteria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $kriterias = $this->kriteriaRepository->all();

        return view('master.kriterias.index')
            ->with('kriterias', $kriterias);
    }

    /**
     * Show the form for creating a new Kriteria.
     *
     * @return Response
     */
    public function create()
    {
        return view('master.kriterias.create');
    }

    /**
     * Store a newly created Kriteria in storage.
     *
     * @param CreateKriteriaRequest $request
     *
     * @return Response
     */
    public function store(CreateKriteriaRequest $request)
    {
        $input = $request->all();

        $kriteria = $this->kriteriaRepository->create($input);

        Flash::success('Kriteria saved successfully.');

        return redirect(route('master.kriterias.index'));
    }

    /**
     * Display the specified Kriteria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kriteria = $this->kriteriaRepository->find($id);

        if (empty($kriteria)) {
            Flash::error('Kriteria not found');

            return redirect(route('master.kriterias.index'));
        }

        return view('master.kriterias.show')->with('kriteria', $kriteria);
    }

    /**
     * Show the form for editing the specified Kriteria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kriteria = $this->kriteriaRepository->find($id);

        if (empty($kriteria)) {
            Flash::error('Kriteria not found');

            return redirect(route('master.kriterias.index'));
        }

        return view('master.kriterias.edit')->with('kriteria', $kriteria);
    }

    /**
     * Update the specified Kriteria in storage.
     *
     * @param int $id
     * @param UpdateKriteriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKriteriaRequest $request)
    {
        $kriteria = $this->kriteriaRepository->find($id);

        if (empty($kriteria)) {
            Flash::error('Kriteria not found');

            return redirect(route('master.kriterias.index'));
        }

        $kriteria = $this->kriteriaRepository->update($request->all(), $id);

        Flash::success('Kriteria updated successfully.');

        return redirect(route('master.kriterias.index'));
    }

    /**
     * Remove the specified Kriteria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kriteria = $this->kriteriaRepository->find($id);

        if (empty($kriteria)) {
            Flash::error('Kriteria not found');

            return redirect(route('master.kriterias.index'));
        }

        $this->kriteriaRepository->delete($id);

        Flash::success('Kriteria deleted successfully.');

        return redirect(route('master.kriterias.index'));
    }
}
