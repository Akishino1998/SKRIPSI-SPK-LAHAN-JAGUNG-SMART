<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataKriteriaRequest;
use App\Http\Requests\UpdateDataKriteriaRequest;
use App\Repositories\DataKriteriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DataKriteriaController extends AppBaseController
{
    /** @var DataKriteriaRepository $dataKriteriaRepository*/
    private $dataKriteriaRepository;

    public function __construct(DataKriteriaRepository $dataKriteriaRepo)
    {
        $this->dataKriteriaRepository = $dataKriteriaRepo;
    }

    /**
     * Display a listing of the DataKriteria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dataKriterias = $this->dataKriteriaRepository->all();

        return view('data_kriterias.index')
            ->with('dataKriterias', $dataKriterias);
    }

    /**
     * Show the form for creating a new DataKriteria.
     *
     * @return Response
     */
    public function create()
    {
        return view('data_kriterias.create');
    }

    /**
     * Store a newly created DataKriteria in storage.
     *
     * @param CreateDataKriteriaRequest $request
     *
     * @return Response
     */
    public function store(CreateDataKriteriaRequest $request)
    {
        $input = $request->all();

        $dataKriteria = $this->dataKriteriaRepository->create($input);

        Flash::success('Data Kriteria saved successfully.');

        return redirect(route('dataKriterias.index'));
    }

    /**
     * Display the specified DataKriteria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataKriteria = $this->dataKriteriaRepository->find($id);

        if (empty($dataKriteria)) {
            Flash::error('Data Kriteria not found');

            return redirect(route('dataKriterias.index'));
        }

        return view('data_kriterias.show')->with('dataKriteria', $dataKriteria);
    }

    /**
     * Show the form for editing the specified DataKriteria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataKriteria = $this->dataKriteriaRepository->find($id);

        if (empty($dataKriteria)) {
            Flash::error('Data Kriteria not found');

            return redirect(route('dataKriterias.index'));
        }

        return view('data_kriterias.edit')->with('dataKriteria', $dataKriteria);
    }

    /**
     * Update the specified DataKriteria in storage.
     *
     * @param int $id
     * @param UpdateDataKriteriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataKriteriaRequest $request)
    {
        $dataKriteria = $this->dataKriteriaRepository->find($id);

        if (empty($dataKriteria)) {
            Flash::error('Data Kriteria not found');

            return redirect(route('dataKriterias.index'));
        }

        $dataKriteria = $this->dataKriteriaRepository->update($request->all(), $id);

        Flash::success('Data Kriteria updated successfully.');

        return redirect(route('dataKriterias.index'));
    }

    /**
     * Remove the specified DataKriteria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataKriteria = $this->dataKriteriaRepository->find($id);

        if (empty($dataKriteria)) {
            Flash::error('Data Kriteria not found');

            return redirect(route('dataKriterias.index'));
        }

        $this->dataKriteriaRepository->delete($id);

        Flash::success('Data Kriteria deleted successfully.');

        return redirect(route('dataKriterias.index'));
    }
}
