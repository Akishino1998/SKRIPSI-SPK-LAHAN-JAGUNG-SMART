<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRefLokasiRequest;
use App\Http\Requests\UpdateRefLokasiRequest;
use App\Repositories\RefLokasiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RefLokasiController extends AppBaseController
{
    /** @var RefLokasiRepository $refLokasiRepository*/
    private $refLokasiRepository;

    public function __construct(RefLokasiRepository $refLokasiRepo)
    {
        $this->refLokasiRepository = $refLokasiRepo;
    }

    /**
     * Display a listing of the RefLokasi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $refLokasis = $this->refLokasiRepository->all();

        return view('master.ref_lokasis.index')
            ->with('refLokasis', $refLokasis);
    }

    /**
     * Show the form for creating a new RefLokasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('master.ref_lokasis.create');
    }

    /**
     * Store a newly created RefLokasi in storage.
     *
     * @param CreateRefLokasiRequest $request
     *
     * @return Response
     */
    public function store(CreateRefLokasiRequest $request)
    {
        $input = $request->all();

        $refLokasi = $this->refLokasiRepository->create($input);

        Flash::success('Ref Lokasi saved successfully.');

        return redirect(route('master.refLokasis.index'));
    }

    /**
     * Display the specified RefLokasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $refLokasi = $this->refLokasiRepository->find($id);

        if (empty($refLokasi)) {
            Flash::error('Ref Lokasi not found');

            return redirect(route('master.refLokasis.index'));
        }

        return view('master.ref_lokasis.show')->with('refLokasi', $refLokasi);
    }

    /**
     * Show the form for editing the specified RefLokasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $refLokasi = $this->refLokasiRepository->find($id);

        if (empty($refLokasi)) {
            Flash::error('Ref Lokasi not found');

            return redirect(route('master.refLokasis.index'));
        }

        return view('master.ref_lokasis.edit')->with('refLokasi', $refLokasi);
    }

    /**
     * Update the specified RefLokasi in storage.
     *
     * @param int $id
     * @param UpdateRefLokasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRefLokasiRequest $request)
    {
        $refLokasi = $this->refLokasiRepository->find($id);

        if (empty($refLokasi)) {
            Flash::error('Ref Lokasi not found');

            return redirect(route('master.refLokasis.index'));
        }

        $refLokasi = $this->refLokasiRepository->update($request->all(), $id);

        Flash::success('Ref Lokasi updated successfully.');

        return redirect(route('master.refLokasis.index'));
    }

    /**
     * Remove the specified RefLokasi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $refLokasi = $this->refLokasiRepository->find($id);

        if (empty($refLokasi)) {
            Flash::error('Ref Lokasi not found');

            return redirect(route('master.refLokasis.index'));
        }

        $this->refLokasiRepository->delete($id);

        Flash::success('Ref Lokasi deleted successfully.');

        return redirect(route('master.refLokasis.index'));
    }
}
